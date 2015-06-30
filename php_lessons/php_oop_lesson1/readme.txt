Visibility is a big part of OOP. It allows you to control where your class members can be accessed from,
for instance to prevent a certain variable to be modified from outside the class. The default visibility 
is public, which means that the class members can be accessed from anywhere. This means that declaring the 
visibility is optional, since it will just fall back to public if there is no access modifier. For backwards 
compatibility, the old way of declaring a class variable, where you would prefix the variable name with the "var"
keyword (this is from PHP 4 and should not be used anymore) will also default to public visibility. 

PHP is pretty simple in this area, because it comes with only 3 different access modifiers: private, protected and public. 

Private members can only be accessed from inside the class itself. 

Protected members can only be accessed from inside the class it self and its child classes. 

Public members can be accessed from anywhere - outside the class, inside the class it self and from child classes.