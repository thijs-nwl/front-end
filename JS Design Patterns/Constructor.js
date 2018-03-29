/*
The Constructor Pattern

In classical object-oriented programming languages, a
constructor is a special method used to initialize a newly
created object once memory has been allocated for it. In JavaScript,
as almost everything is an object, we're most often interested in object
constructors.

Object constructors are used to create specific types of
objects - both preparing the object for use and accepting arguments
which a constructor can use to set the values of member properties and methods
when the object is first created.
*/

//three common ways to create new objects

var newObject = {};

var newObject = Object.create( Object.prototype );

var newObject = new Object();


//There are then four ways in which keys and values can then be assigned to an object:

//1. Dot syntax

//set properties
newObject.someKey = "Hello World";

//get properties
var value = newObject.someKey;

//2. Square bracket syntax

//set properties
newObject["someKey"] = "Hello World";

//get properties
var value = newObject["someKey"];

// 3. Object.defineProperty

// Set properties
Object.defineProperty( newObject, "someKey", {
    value: "for more control of the property's behavior",
    writable: true,
    enumerable: true,
    configurable: true
});

// If the above feels a little difficult to read, a short-hand could
// be written as follows:

var defineProp = function ( obj, key, value ){
  var config = {
    value: value,
    writable: true,
    enumerable: true,
    configurable: true
  };
  Object.defineProperty( obj, key, config );
};

// To use, we then create a new empty "person" object
var person = Object.create( Object.prototype );

// Populate the object with properties
defineProp( person, "car", "Delorean" );
defineProp( person, "dateOfBirth", "1981" );
defineProp( person, "hasBeard", false );

console.log(person);
// Outputs: Object {car: "Delorean", dateOfBirth: "1981", hasBeard: false}

//4. Object.defineProperties

//set properties
Object.defineProperties( newObject, {
  "someKey": {
    value: "hello world",
    writable: true
  },
  "anotherKey": {
    value: "foo bar",
    writable: false
  }
});

//getting properties for 3 and 4 can be done using same
//optiens in 1 and 2

/*
Basic Constructors

As we saw earlier, JavaScript doesn't support the concept of classes but it does support special
constructor functions that work with objects. By simply prefixing a call to a constructor function with
the keyword "new", we can tell JavaScript we would like the function to behave like a constructor
and instantiate a new object with the members defined by that function.

Inside a constructor, the keyword this references the new object that's being created.
Revisiting object creation, a basic constructor may look as follows:
*/

function Car(model, year, miles) {
  this.model = model;
  this.year = year;
  this.miles = miles;

  this.toString = function () {
    return this.model + " has done " + this.miles + " miles";
  }
}

//Usage:

//create new instances of the car
var civic = new Car("honda civic", 2009, 20000);
var mondeo = new Car("ford mondeo", 2010, 5000);

console.log(civic.toString());

/*
The above is a simple version of the constructor pattern but it does suffer from some problems.
One is that it makes inheritance difficult and the other is that functions such as toString() are
redefined for each of the new objects created using the Car constructor. This isn't very optimal as
the function should ideally be shared between all of the instances of the Car type.

Thankfully as there are a number of both ES3 and ES5-compatible alternatives to constructing objects,
it's trivial to work around this limitation.
/*

/*
Constructors With Prototypes

Functions, like almost all objects in JavaScript, contain a "prototype" object.
When we call a JavaScript constructor to create an object, all the properties of the
constructor's prototype are then made available to the new object. In this fashion,
multiple Car objects can be created which access the same prototype. We can thus extend
the original example as follows:
*/

function Car(model, year, miles) {
  this.model = model;
  this.year = year;
  this.miles = miles;
}

Car.prototype.toString = function() {
  return this.model + " has done " + this.miles + " miles";
}

//Above, a single instance of toString() will now be shared between all of the Car objects.
