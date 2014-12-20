wpandex
=======

wpandex, contruction with bootstrap , manager post, page, category relational, tags, pictures, videos, files

## Installing/Configuring

This proyect is developed for **Wordpress** so I understand that you know handle this CMS level basic (something administrator)


### Requirements
* PHP version : 5.3 or >
* MySQL
* Wordpress 4.0* or > [website download](https://wordpress.org/download/)



### Installation

#### step 1

After to Dowload wordpress.zip so have descompress example: **/var/www/html/wpandex**

#### step 2

You have to replace the existing folder **wp-content**  by **src/wp-content**

#### step 3
.



### Configuration extra

#### 1 change to url friendly
Change to url friendy: 
we must go: **administrator** 
*Dashboard : settings : permalinks (radioButton : Custom Structure)*
paste this :
    
    /%category%/%postname%.html

    
Note:
offten is necessary to create the file manually:
I so ago in terminal bash:

    touch .htaccess # and after save changes in wordpress.
    
    


### Exclusive installation for this Theme named *AndexOne* (Spanish)

#### crear las categorias necesarias

Entoncés creamos esta lista de **categorias** al costado equivalentes en ingles:

    noticias :
    ejecucion de obras : 
    proyectos :
    soluciones :
    
    productos
    
    ... :...
paginas a crear static:  *title : slug*
    
    nosotros :
    asistencia tecnica : asistencia-tecnica



#### noticias (news)

Primero que se debe de hacer es crear una categoria llamada **news**
es muy importante ya que sera la que se mostrara como principal en la pagina de inicio.

Ahora tenemos que crear **post** asignandole esta categoria **news**  para que se muestren correctamnete.

#### slides (slides)
creamos la categoria slides si no la tenemos ya creada. y empezamos a relacionarlos con los post, es muy importante subir una imagen para estos post (en **Feacture Image**)
ir a: Dashboard : Post : add post (title, feacture image)


#### crear los menus de  navegacion ()
Agregar 2 menus de navegacion :
ir a : *Dashboard : Aparence : menus :(link:create new menu)*
* primary menu (asignar las paginas correspondientes : home,contactenos)
* second menu (asignar las paginas correspondientes : proyectos, socios estrátegicos,noticias)


####  Activar y crear widget (noticas relacionadas)
Para relacionar los post tenemos que activar el widget llamado 
**Widget AndexOne Post** este widget es exclusivo de la plantilla *AndexOne*






    






image reference

![thumbnail](https://github.com/enlacee/wpandex/blob/master/src/wp-content/themes/andexone/screenshot.png) 



 :
