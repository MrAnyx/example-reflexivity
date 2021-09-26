# UQAC Reflexivity

En programmation orientée objet, la réflexivité est une notion plus complexe que ce qu'elle laisse transparaître. En effet, les API de réflexivité dans la plupart des langages regroupent généralement deux aspects :

- L'introspection qui permet d'examiner un objet, de récupérer les attributs, les méthodes, les interfaces, l'héritage, ...
- La réflexivité, qui permet de modifier le comportement d'un objet ou d'une classe.

On remarque donc que l'introspection est un ensemble plus global que l'on appelle réflexivité.

Dans la majorité des langages orientés objets, il existe une API permettant d'appliquer à la fois le principe d'introspection et de réflexivité.

C'est d'ailleurs grâce à ce principe que la plupart des `dumper` fonctionnent. Par exemple, la librairie PHP `symfony/var-dumper` utilise la réflexivité afin de débugger des variables, des objets, ... En affichant les propriétés de cet objet.

Toutefois, ce principe ne doit pas être confondu avec l'introspection.

Finalement, appliquer de type de principe permet :

- D'accéder aux propriétés d'un objet via l'introspection,
- De modifier le comportement de ces objets au moment de l'exécution du programme via la réflexivité,
- D'appeler une méthode non-static sans créer d'objet correspondant à la classe
