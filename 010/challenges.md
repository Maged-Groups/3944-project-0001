# OOP Extends Challenges

## Vehicles

### Parent Class

- Create a parent class named `Vehicle`.
- Add the following methods:
    - `showName()`
    - `showPrice()`
    - `showPaymentPlan()`
    - `startEngine()`
    - `stopEngine()`

### Child Classes

#### 1. Car
- Create a child class named `Car` that extends `Vehicle`.
- Add the following methods:
    - `showNumberOfDoors()`
    - `showFuelType()`

#### 2. Motorcycle
- Create a child class named `Motorcycle` that extends `Vehicle`.
- Add the following methods:
    - `showEngineCapacity()`
    - `showHasSidecar()`

#### 3. Bus
- Create a child class named `Bus` that extends `Vehicle`.
- Add the following methods:
    - `showNumberOfPassengers()`
    - `showBusType()`

#### 4. Truck
- Create a child class named `Truck` that extends `Vehicle`.
- Add the following methods:
    - `showLoadCapacity()`
    - `showNumberOfWheels()`

### Testing page
- Create an index.php file.
- Include the file that contains the classes.
- Call the methods of Car, Motorcycle, Bus, and Truck.
- Call the methods inherited from Vehicle through each child class.
- Display all output in the Postman.

### Requirements

- Use `extends` to inherit methods from the parent class.
- Every method should use `echo` to print information.


## Recipy

### Parent Class

- Create a parent class named `Recipy`.
- Add the following methods:
    - `showName()`
    - `showPrice()`
    - `showIngredients()`

### Child Classes

#### 1. Pizza
- Create a child class named `Pizza` that extends `Recipy`.
- Add the following methods:
    - `showPizzaSize()`
    - `showCrustType()`

#### 2. Burger
- Create a child class named `Burger` that extends `Recipy`.
- Add the following methods:
    - `showBurgerType()`
    - `showCheeseOption()`

#### 3. Sandwich
- Create a child class named `Sandwich` that extends `Recipy`.
- Add the following methods:
    - `showBreadType()`
    - `showToastedStatus()`

#### 4. IceCream
- Create a child class named `IceCream` that extends `Recipy`.
- Add the following methods:
    - `showFlavor()`
    - `showTopping()`

### Testing page
- Create an index.php file.
- Include the file that contains the classes.
- Call the methods of Pizza, Burger, Sandwich, and IceCream
- Call the methods inherited from Recipy through each child class.
- Display all output in the Postman.

### Requirements

- Use `extends` to inherit methods from the parent class.
- Every method should use `echo` to print information.