<?php
# shared_fragments
# ================
#
# This library provides a way of including shared fragments, chunks of
# HTML that can be shared between applications.
#
# The fragments are stored in the SHARED_FRAGMENTS_DIRECTORY.
#
# Get a fragment's content as a string with the "read_shared_fragment"
# function, or raise a SharedFragmentNotFoundException if one isn't
# found.
#
# Echo a fragment's contents into the stream with "echo_shared_fragment",
# or echo a descriptive message explaining what went wrong.

# Directory with the shared fragments.
define(SHARED_FRAGMENTS_DIRECTORY, dirname(__FILE__) . "/shared_fragments");

# HTML to show if a shared fragment can't be found. This is a sprintf
# string that accepts a single argument: the name of the missing file.
define(SHARED_FRAGMENT_EXCEPTION_TEMPLATE, <<<EOB

<p style="background: #F2D6D6; border: 2px solid #C37575; padding: 0.5em; margin: 1em;">
    <strong>ERROR:</strong> Couldn't find shared fragment file "<code>%s</code>". This theme expects the admin to symlink the OpenConferenceWare "RAILS_ROOT/<code>public/system/shared_fragments</code>" directory to this theme's "<code>shared_fragments</code>" directory or create this directory and its static files so they can be included here. Please report this error to <a href="mailto:web@opensourcebridge.org">web@opensourcebridge.org</a>.
</p>
EOB
);

# Exception thrown when a shared fragment wasn't found, contains a
# special getFriendlyMessage method that returns fancy HTML.
class SharedFragmentNotFoundException extends Exception {
    public $filename;

    public function __construct($message, $filename) {
        $this->filename = $filename;
        parent::__construct($message);
    }

    public function getFriendlyMessage() {
        return sprintf(SHARED_FRAGMENT_EXCEPTION_TEMPLATE, $this->filename);
    }
}

# Echo the shared fragment for $name or a helpful error message.
function echo_shared_fragment($name) {
    try {
        echo read_shared_fragment($name);
    } catch (SharedFragmentNotFoundException $e) {
        echo $e->getFriendlyMessage();
    }
}

# Return a string for the shared fragment for $name, else raise a
# SharedFragmentNotFoundException.
function read_shared_fragment($name) {
    $filename = SHARED_FRAGMENTS_DIRECTORY . "/$name";
    $failure = FALSE;
    $content = NULL;

    if (file_exists($filename)) {
        $handle = fopen($filename, 'r');
        if ($handle) {
            $content = fread($handle, filesize($filename));
            fclose($handle);
        } else {
            $failure = TRUE;
        }
    } else {
        $failure = TRUE;
    }

    if ($failure) {
        throw new SharedFragmentNotFoundException("Couldn't find shared fragment: $name", $filename);
    } else {
        return $content;
    }
}
?>
