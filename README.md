# Jorny

Er zijn 2 folders, voor klant1 en voor klant2. Elk van die folders heeft een `Dockerfile`.

Build and run containers voor klant 1 en klant 2.

```powershell
docker build -t klant1:v0.1 ./klant1
docker build -t klant2:v0.1 ./klant2
```

Er zijn 2 images gebouwd.

![alt build containers](./images/build%20containers.png)

We starten de images

```powershell
docker run -d -p 9081:80 klant1:v0.1
docker run -d -p 9082:80 klant2:v0.1
```

Er zijn 2 containers gestart. De poorten zijn 9081 en 9082 voor de respectievelijke klanten.

![alt run containers](images/run%20containers.png)

De containers draaien op hun poorten 9081 en 9082.

![alt klant1](./images/klant1.png)

![alt klant2](./images/klant2.png)

We willen een systeem om gemakkelijk van de ene klant naar de andere te gaan zonder de poorten te moeten onthouden

## Optie 1 - GitHub - Easy

Hou de urls gewoon bij in een GitHub pagina:

- [klant1](http://localhost:9081)
- [klant2](http://localhost:9082)

De GitHub staat centraal en vereist geen extra hosting.

## Optie 2 - Reverse proxy - Minder easy

We hadden het erover om de urls op een Apache static webpage te hosten, maar dan vind ik optie 1 eleganter.
Maar we kunnen wel mooiere dingen doen met een reverse proxy. We kunnen ervoor zorgen dat `http://localhost/klant1` geredirect wordt naar `http://localhost:9081`.

We gebruiken hiervoor nginx.



