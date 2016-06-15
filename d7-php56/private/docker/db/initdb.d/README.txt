Add any databasedumps you want imported when the db services starts up here.

Rename 900-reset.sql-disabled to 900-reset.sql if you want to reset the admin-users username/pass to admin/admin - Dumps are imported in alphabetical order so any other dumps you add should be prefixed by a lower numper.

Notice that the .gitignore in this dir will ignore anything but the 900-reset.sql file.