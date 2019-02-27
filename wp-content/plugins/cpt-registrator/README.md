## Goals:

1. Create a simple "framework" for auto-registering CPTs in Wordpress without having to remember a `require_once` statement in either your `functions.php` file or some "single source of truth" type file.

2. Reduce tedium and code duplication found when defining CPT arguments.

## Tasks

- [ ] Create base class for **defining** a custom post type
- [ ] Create a base class for defining taxonomies
- [ ] Implement single file method for defining all cpts in a site.
- ~[ ] Create "autoloading" class~
- [ ] (**Reach Goal**) Add ability to define a "parent" CPT. This parent will act as a top level menu item which will then direct to a dashboard-like admin page. The page will be used to then display all child CPT records.
- [ ] (**Reach Goal**) Add extension for use with ACF and CMB2
