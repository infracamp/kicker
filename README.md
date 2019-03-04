# Infracamp kicker

**This is an internal project.**

This Project is part of the **kickstart-flavor-* ** projects

##


```yaml
version: 1
from: "from/docker-image"

config_file:
  template: "config.php.dist"
  target: "config.php"

env:
  SOME_ENV_VAR: "Some value"

command:
    command_name1:
      - "script to exec (as user)"
      
      

```