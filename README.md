Filesystem Component
====================
Windows:[![Build status](https://ci.appveyor.com/api/projects/status/igy293x701ej8atc?svg=true)](https://ci.appveyor.com/project/medz/filesystem)

Filesystem provides basic utility to manipulate the file system:

```php
<?php

use Medz\Component\Filesystem\Filesystem;

Filesystem::exists($path); // Determine if a file exists.

Filesystem::get($path); // Get the contents of a file.

Filesystem::getRequire($path); // Get the returned value of a file.

Filesystem::requireOnce($file); // Require the given file once.

Filesystem::put($path, $contents, $lock = false); // Write the contents of a file.

Filesystem::prepend($path, $data); // Prepend to a file.

Filesystem::append($path, $data); // Append to a file.

Filesystem::delete($paths); // Delete the file at a given path.

Filesystem::move($path, $target); // Move a file to a new location.

Filesystem::copy($path, $target); // Copy a file to a new location.

Filesystem::name($path); // Extract the file name from a file path.

Filesystem::extension($path); // Extract the file extension from a file path.

Filesystem::type($path); // Get the file type of a given file.

Filesystem::size($path); // Get the file size of a given file.

Filesystem::lastModified($path); // Get the file's last modification time.

Filesystem::lisDirectory($directory); // Determine if the given path is a directory.

Filesystem::isWritable($path); // Determine if the given path is writable.

Filesystem::isFile($file); // Determine if the given path is a file.

Filesystem::glob($pattern, $flags = 0); // Find path names matching a given pattern.

Filesystem::files($directory); // Get an array of all files in a directory.

Filesystem::allFiles($directory); // Get all of the files from the given directory (recursive).

Filesystem::directories($directory); // Get all of the directories within a given directory.

Filesystem::makeDirectory($path, $mode = 0755, $recursive = false, $force = false); // Create a directory.

Filesystem::copyDirectory($directory, $destination, $options = null); // Copy a directory from one location to another.

Filesystem::deleteDirectory($directory, $preserve = false); // Recursively delete a directory.

Filesystem::cleanDirectory($directory); // Empty the specified directory of all files and folders.

```
