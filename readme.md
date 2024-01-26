# Example WordPress Repo Setup with `wp-cli`

## Prerequisites (installed & in your `$PATH`)
- [`wp-cli`](https://make.wordpress.org/cli/handbook/)
- [`gh`](https://cli.github.com/manual/)

Create a new repo and clone it locally:
`gh repo create khm-travel/foo --public --clone`

Enter the project
`cd foo`

Configure repo to not track WP core
`touch .gitignore`

[Example](https://github.com/github/gitignore/blob/main/WordPress.gitignore).

Install WordPress
`wp core download`

Create the configuration file from the sample provided.
`mv wp-config-sample.php wp-config.php`

Update the configuration file with database connection details.

Install the database (if this is a brand new site).
`wp core install`

Otherwise, import the database from an archive.
