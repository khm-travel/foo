# Example WordPress Repo Setup with `wp-cli`

## Prereq CLI utilities
- `wp-cli`
- `gh`

Create a new repo and clone it locally:
`gh repo create khm-travel/foo --public --clone`

Enter the project
`cd foo`

Install WordPress
`wp core download`

Configure repo to not track WP core
`touch .gitignore`
[Example](https://github.com/github/gitignore/blob/main/WordPress.gitignore).