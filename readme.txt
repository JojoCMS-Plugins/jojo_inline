The Jojo_Inline plugin provides a very similar function to the Jojo core
/downloads handler.

Swapping /downloads with /inline at the start of the URI will result in the
file being send with a Content-Disposition: inline header every time. For some
file types, like PDF, this will result in the browser displaying the file within
a browser tab using an extension instead of downloading the file and running an
external program.
