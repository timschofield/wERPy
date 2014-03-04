wERPy
=====

WebERP GUI changes, view code / working code separation project

Current Status: Work In Progress
===

Goals:
------

 * Refactor existing code to separate out View components (i.e. implementing a MVP design pattern)
 * Integrate jQuery and Bootstrap for a more slick user experience
 * Delegate includes to be theme-specific

Here is the rough version of table, form and control classes with bootstrap and tablesorter.

 * The table class should be able to handle most tables in webERP though some more complicated structures 
(e.g. the Trial Balance) may need customizations.
 * The form and control classes currently only support once control per line, which works for many of the simple control interfaces but it will need to be extended to support more layouts.
Likely that will mean a new form class (the current form view should be renamed simpleFormView and a new extended class extendedFormView should handle more advanced construction, something like that)

Use:
----
 1. copy-paste into your webERP folder. Do not do this on a production site, the code isn't ready.
 2. to 'hook in' add these lines to header.inc and footer.inc:

Before default.css is linked in header.inc i.e. before line 40:

``` php
include($_SERVER['DOCUMENT_ROOT'] . $RootPath . '/views/views-header.php');
```

After the last </div> but before </body> in footer.inc:

``` php
include($_SERVER['DOCUMENT_ROOT'] . $RootPath . '/views/views-footer.php');
```

Work To Do:
----

 * Extend formView / create more complicated extension of formView class to cover all use cases
 * Headers/footers/menus should also be rolled into the themes themselves
 * 'Classic' themes that will cause webERP to render the same way it does now
 * Code refactoring to take advantage of the view classes
