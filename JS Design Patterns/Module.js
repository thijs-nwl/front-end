/*

The Module Pattern

Modules

Modules are an integral piece of any robust application's architecture and typically
help in keeping the units of code for a project both cleanly separated and organized.

In JavaScript, there are several options for implementing modules. These include:

The Module pattern
Object literal notation
AMD modules
CommonJS modules
ECMAScript Harmony modules
We will be exploring the latter three of these options later on in the book in the
section Modern Modular JavaScript Design Patterns.

The Module pattern is based in part on object literals and so it makes sense to refresh
our knowledge of them first.

Object Literals

In object literal notation, an object is described as a set of comma-separated name/value pairs
enclosed in curly braces ({}). Names inside the object may be either strings or identifiers that
are followed by a colon. There should be no comma used after the final name/value pair in the
object as this may result in errors.
*/

var myObjectLiteral = {
  variableKey: variableValue,
  functionKey: function() {
    // ...
  }
}

/*
Object literals don't require instantiation using the new operator but
shouldn't be used at the start of a statement as the opening
{ may be interpreted as the beginning of a block. Outside of an object,
new members may be added to it using assignment as follows myModule.property = "someValue";

Below we can see a more complete example of a module defined using object literal notation:
*/

var myModule {
  myProperty: "someValue",
  //object literals can contain properties and methods.
  //e.g we can define a further object for module config:
  myConfig: {
    useCaching: true,
    language: "en"
  },

  //a very basic method
  saySometing: function () {
    console.log("where in the world is Paul Irish today?");
  },

  //output a val based on curr config
  reportMyConfig: function () {
    console.log("Caching is: " + ( this.myConfig.useCaching ? "enabled" : "disabled"));
  },

  //override the curr config
  updateMyConfig: function(newConfig){
    if(typeof newConfig === "object"){
      this.myConfig = newConfig;
      console.log(this.myConfig.language);
    }
  }
};

// Outputs: Where in the world is Paul Irish today?
myModule.saySometing();

// Outputs: Caching is: enabled
myModule.reportMyConfig();

//outputs: fr
myModule.updateMyConfig({
  language: "fr",
  useCaching: false
})

//ouputs: Caching is: disabled
myModule.reportMyConfig();

/*
Using object literals can assist in encapsulating and organizing your code.

re opting for this technique, we may be equally as interested in the Module pattern.
It still uses object literals but only as the return value from a scoping function.

The Module Pattern

The Module pattern was originally defined as a way to provide both private and public
encapsulation for classes in conventional software engineering.
In JavaScript, the Module pattern is used to further emulate the concept of classes in such a way
that we're able to include both public/private methods and variables inside a single object, thus
shielding particular parts from the global scope. What this results in is a reduction in the likelihood
of our function names conflicting with other functions defined in additional scripts on the page.

Privacy
The Module pattern encapsulates "privacy", state and organization using closures.
It provides a way of wrapping a mix of public and private methods and variables,
protecting pieces from leaking into the global scope and accidentally colliding
with another developer's interface. With this pattern, only a public API is returned,
keeping everything else within the closure private.

This gives us a clean solution for shielding logic doing the heavy lifting whilst
only exposing an interface we wish other parts of our application to use.
The pattern utilizes an immediately-invoked function expression
(IIFE - see the section on namespacing patterns for more on this)
where an object is returned.

It should be noted that there isn't really an explicitly true sense of "privacy"
inside JavaScript because unlike some traditional languages, it doesn't have access modifiers. 
Variables can't technically be declared as being public nor private and so we use function
scope to simulate this concept. Within the Module pattern, variables or methods declared are
only available inside the module itself thanks to closure. Variables or methods defined within
the returning object however are available to everyone.

History
From a historical perspective, the Module pattern was originally developed by a number
of people including Richard Cornford in 2003. It was later popularized by Douglas
Crockford in his lectures. Another piece of trivia is that if you've ever played with
Yahoo's YUI library, some of its features may appear quite familiar and the reason for
this is that the Module pattern was a strong influence for YUI when creating their components.

Examples
Let's begin looking at an implementation of the Module pattern
by creating a module which is self-contained.
*/
