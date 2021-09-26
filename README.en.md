# UQAC Reflexivity

In object-oriented programming, reflexivity is a more complex notion than it appears. Indeed, the reflexivity APIs in most languages generally include two aspects:

- Introspection, which allows to examine an object, to retrieve attributes, methods, interfaces, inheritance, ...
- Reflexivity, which allows to modify the behavior of an object or a class.

We can therefore see that introspection is a more global set that we call reflexivity.

In the majority of object-oriented languages, there is an API that allows us to apply both the principle of introspection and reflexivity.

It is thanks to this principle that most `dumper` work. For example, the PHP library `symfony/var-dumper` uses reflexivity to debug variables, objects, ... By displaying the properties of this object.

However, this principle should not be confused with introspection.

Finally, applying this type of principle allows :

- Access the properties of an object via introspection,
- To modify the behavior of these objects at the time of program execution via reflexivity,
- To call a non-static method without creating an object corresponding to the class
