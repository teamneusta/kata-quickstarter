# php-mocking-kata

#### mo-what?

In object-oriented programming, mock objects are simulated objects that mimic the behavior of real objects in controlled ways, most often as part of a software testing initiative. A programmer typically creates a mock object to test the behavior of some other object, in much the same way that a car designer uses a crash test dummy to simulate the dynamic behavior of a human in vehicle impacts. The technique is also applicable in generic programming.<br> 
[https://en.wikipedia.org/wiki/Mock_object]

#### kata-what?
A code kata is an exercise in programming which helps programmers hone their skills through practice and repetition.

In 1999, the term was used by Dave Thomas, co-author of the book The Pragmatic Programmer,[1] in a bow to the Japanese concept of kata in the martial arts. The concept was implemented by Laurent Bossavit and Emmanuel Gaillot who talked about it at XP2005 in Sheffield (UK).[2] Following this conference, Robert C. Martin described the concept and initial usages in his article "The Programming Dojo".
[https://en.wikipedia.org/wiki/Kata_(programming)]

#### What to do here?
This kata combines the string-calculator and the arabic-to-roman-number-converter in one project.<br>
e.g. [http://codingdojo.org/kata/StringCalculator/]<br>
e.g. [http://codingdojo.org/kata/RomanNumerals/]

The main task in this kata is to use mock-objects to produce valid test-cases.
A good point to start is the RandoriServiceInterface.php. The class which implements this interface holds just one method called 'transform', taking a string and returning a string.
This method should behave as follows:<br>
- plus-separated numbers in input-string will be summed up, e.g. '2+3'
- result of calculation is translated into a roman representation, e.g 'V'

 As you use mocking-technique, there is no need to implement a class for the ArabicConverterInterface or the StringCalculatorInterface.
 All methods should be mocked in the tests.
 
 When first coding is done, next steps would be the implementation of the other basic arithmetic operations (minus, times, divide).
 Remember: the StringcalculatorInterface only allows one public method "add()" to be used.
 All operations must be trasnformed into an addition.
