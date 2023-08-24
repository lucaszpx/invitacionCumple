###Imagen de docker con finalidad educativa.

Clonar este repositorio, posicionarse dentro del directorio y compilarla con:
```
docker build . -t invitacion
```
Luego ejecutar un nuevo container con el siguiente comando de ejemplo (adaptarlo)

```
docker run --rm --name tarjeta1 -eNOMBRE="Ana" -eLUGAR="Club Italiano" -eFECHA"04 de Octubre" -eHORARIO="15" -eFIRMA="Irene" -d -p81:80 invitacion:1
```
Las variables para pesonalizar son las siguientes:
- NOMBRE
- LUGAR
- FECHA
- HORARIO
- FIRMA
- Color
