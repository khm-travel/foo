# Example WordPress Repo Setup with `wp-cli`

## Prerequisites (installed & in your `$PATH`)
- [`wp-cli`](https://make.wordpress.org/cli/handbook/)
- [`gh`](https://cli.github.com/manual/)

Create a new repo and clone it locally:
`gh repo create khm-travel/foo --public --clone`

Enter the project
`cd foo`

Install WordPress
`wp core download`

Configure repo to not track WP core
`touch .gitignore`

[Example](https://github.com/github/gitignore/blob/main/WordPress.gitignore).