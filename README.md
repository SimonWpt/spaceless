# CouchCMS Spaceless

CouchCMS Addon. Adds a new `<cms:spaceless>`-Tag to trim redundant spaces from start an end of lines. Can remove EOL, too.

## Installation

1. Download Add-On
2. Extract directory `trim` in `'couch/addons'` folder.
3. Add the following entry in `'couch/addons/kfunctions.php'` file<br>(if this file is not found, rename the `kfunctions.example.php` file to `kfunctions.php`)

``` php
require_once( K_COUCH_DIR.'addons/trim/spaceless.php' );
```

## Usage

This addon makes available a new `<cms:spaceless>`-Tag. It is very simple to use:

``` html
<cms:spaceless>
<script>
    console.log("Hello world");
</script>
</cms:spaceless>
```

The generated code looks like:

``` html
<script>console.log("Hello world");</script>
```

## Parameter

* convert

Parameter can be set empty, `space`  `lf` or `crlf` (when omitting, default is empty):

``` html
<cms:spaceless convert='none'>
<script>
    console.log("Hello world");
</script>
</cms:spaceless>

<cms:spaceless convert='<cms:spaceless convert='space'>
<script>
    console.log("Hello world");
</script>
</cms:spaceless>

<cms:spaceless convert='lf'>
<script>
    console.log("Hello world");
</script>
</cms:spaceless>

<cms:spaceless convert='crlf'>
<script>
    console.log("Hello world");
</script>
</cms:spaceless>
```

The generated code looks like:

``` html
<script>console.log("Hello world");</script>

<script> console.log("Hello world"); </script>

<script>
console.log("Hello world");
</script>

<script>
console.log("Hello world");
</script>
```