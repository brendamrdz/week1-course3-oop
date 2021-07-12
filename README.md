# Object oriented programming
## Why learn Object Oriented Programming?
- You will program faster. Having a previous analysis of what you are doing will help you to generate code much faster.
- You will be able to answer questions such as What is Encapsulation, What is Abstraction, What is Inheritance, What is Polymorphism in future job interviews?
- Stop copying and pasting code.

## Structured programming
Object Oriented programming is born from the problems created by structured programming and helps us to solve certain problems such as:
- Very long code: As a system grows and becomes more robust the generated code becomes very long making it difficult to read, debug, maintain.
- If something fails, everything breaks: Since with structured programming the code is executed sequentially, if one of those lines fails, everything else stops working.
- Difficult to maintain.


Object Oriented Programming comes from a philosophy or way of thinking that is Object Oriented and this arises from the problems that we need to translate into code.
It is to analyze a problem in the form of objects and then take it to code, that is Object Oriented.
A paradigm is a theory that provides the basis and model for solving problems. The Object Oriented Programming paradigm is composed of 4 elements:
Classes
Properties
Methods
Objects

**And 4 Pillars:**
Encapsulation
Abstraction
Inheritance
Polymorphism

## Oriented programming languages:
Java:
- Naturally Object Oriented
- It is very useful in Android
- And it is used on the server side or Server Side.
PHP
- Interpreted language
- Intended for the Web
Python
- Designed to be easy to use
- Multiple uses: Web, Server Side, Data Analysis, Machine Learning, etc.
Javascript
- Interpreted language
- Object Oriented but based on prototypes
- Designed for the Web
C#
Ruby
Kotlin

## Modeling Diagrams
**OMT**: Object Modeling Techniques. It is a methodology for object-oriented analysis.
### UML
UML: Unified Modeling Language. It took the bases and techniques of OMT unifying them. We have more options of diagrams such as Classes, Use Cases, Objects, Activities, Iteration, States, Implementation.
#### Classes
<br><img src="https://github.com/brendamrdz/week1-course3-oop/blob/main/images/clase.jpg?raw=true" alt="alt text" width="25%" height="auto"><br><br>
At the top are the attributes or properties, and below are the operations of the class. You will notice that the first character they start with is a symbol. This will denote the visibility of the attribute or method, this is a term that has to do with Encapsulation and we will see it later in detail.

These are the levels of visibility that you can have:
- private
+ public
#protected
~ default

#### Association
<br><br><img src="https://github.com/brendamrdz/week1-course3-oop/blob/main/images/asociaci%C3%B3n.jpg?raw=true" alt="alt text" width="10%" height="auto"><br><br>
Each time this type of arrow is referenced, it means that this element contains the other element in its definition. The arrow will point to the dependency.
#### Inheritance
<br><br><img src="https://github.com/brendamrdz/week1-course3-oop/blob/main/images/herencia.jpg?raw=true" alt="alt text" width="10%" height="auto"><br><br>
This arrow expresses the inheritance.
The direction of the arrow will go from the child to the parent.
#### Aggregation
<br><br><img src="https://github.com/brendamrdz/week1-course3-oop/blob/main/images/agregacion-simbolo.jpg?raw=true" alt="alt text" width="10%" height="auto"><br><br>
This is similar to the association in that one element will depend on the other, but in this case it will be: One element will depend on many others. Here we take as reference the multiplicity of the element. What you would commonly know in Databases as One to Many Relationships.
#### Composition
<br><br><img src="https://github.com/brendamrdz/week1-course3-oop/blob/main/images/simbolo-composicion.jpg?raw=true" alt="alt text" width="10%" height="auto"><br><br>
This is similar to the previous one only that their relationship is totally dependent on each other in such a way that conceptually one of these classes could not live if the other did not exist.

## Objects
Objects are those that have properties and behaviors, they will also be nouns.

They can be Physical or Conceptual
Properties can also be called attributes and these will also be nouns. Some attributes or properties are name, size, shape, state, etc. They are all the characteristics of the object.

Behaviors will be all the operations that the object can do, they are usually verbs or nouns and verb. Some examples can be that the user can login and logout.

