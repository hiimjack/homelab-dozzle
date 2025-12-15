# homelab-dozzle

## Requirements

- [docker](https://docs.docker.com/engine/install/)
- [docker compose](https://docs.docker.com/compose/install/)

## Usage

```bash
docker compose pull
docker compose up -d
```

Visit `http://localhost:8080` to see the Dozzle page

Visit `http://localhost:8081` to see a simple _php_ app

Visit `http://localhost:8082` to see the _redis_ web interface

In this example, you can authenticate on Dozzle with three accounts.
Each account has different permissions.

|    user     |             password             |           permission           |
| :---------: | :------------------------------: | :----------------------------: |
|   `admin`   | `ieGho3pi9vae4aePhooGhooTh7il1O` |     can see all resources      |
| `redis-app` | `oohi9ahth6anawauzauNae0AiCh3va` | can see Redis and RedisInsight |
|  `php-app`  | `woocahphebeaC5ap1shaeReeyei9yi` |     can see php and nginx      |
