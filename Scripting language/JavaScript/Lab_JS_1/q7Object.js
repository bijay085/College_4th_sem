// 7. What is an Object? Write a program to demonstrate built-in and user-defined object with multiple-ways of  creating an object including listed tasks using property and methods from prototype: - Check prototypes of Object() 
// - Add data as a first element on existing object. 
// - Add data as a last element on existing object. 
// - Remove first element/data from existing object. 
// - Remove last element/data from existing object. 
// - Add data on any middle position on existing object. 
// - Remove from any middle position from existing object. 
// - Write a program to display data from object with for-loop 
// - Display single element of array without loop 
// - Write a JavaScript to demonstrate object de-structuring.

// ==> JavaScript object is a non-primitive data-type that allows us to store multiple collections of data.
// Arrays are ordered collections accessed by numerical indices, while objects store data as key-value pairs.

// object
let student = {
    firstName: 'ram',
    class: 10
};
console.log("Original object is :");
console.log(student);

// // // - Add data as a first element on existing object. 
// // to set student Roll as  1 at 1st ;
// console.log("Add data as a first element on existing object. ");
// let updatedStudent = { rollNumber : 1, ...student};
// console.log(updatedStudent);

// // - Add data as a last element on existing object. 
// console.log("Add data as a last element on existing object");
// updatedStudent.section = 'A';
// console.log(updatedStudent);

// // - Add data on any middle position on existing object. 
// student.middleKey = 'middleValue';
// console.log('Object after adding element at a middle position:', student);

// // - Remove first element/data from existing object. 
// delete student.key1;
// console.log('Object after removing first element:', student);

// // - Remove last element/data from existing object. 
// delete student.anotherKey;
// console.log('Object after removing last element:', student);

// // - Remove from any middle position from existing object. 
// console.log(" Remove last element/data from existing object.");
// delete updatedStudent.section;
// console.log(updatedStudent);

// Check prototypes of Object()
console.log(Object.prototype);

// Add data as a new element at the beginning
student.newKey = 'newValue';
console.log('Object after adding element at first:', student);

// Add data as a new element at the end
student.anotherKey = 'anotherValue';
console.log('Object after adding element at last:', student);

// Add data at a middle position
student.middleKey = 'middleValue';
console.log('Object after adding element at a middle position:', student);

// Remove the first element
delete student.key1;
console.log('Object after removing first element:', student);

// Remove the last element
delete student.anotherKey;
console.log('Object after removing last element:', student);

// Remove data from a middle position
delete student.middleKey;
console.log('Object after removing element from a middle position:', student);

// - Write a program to display data from object with for-loop 
let car = {
    Company : 'BMW',
    Price : 100000,
    MadeIn : 'USA'
};
for(let i in car){
    console.log(car[i]);  //output = BMW , 100000, USA
    console.log(i + ":" + car[i]); //output = ALL 
}
// - Display single element of array without loop 
console.log(car.Company);

// - Write a JavaScript to demonstrate object de-structuring.
let {Company, Price, MadeIn} = car;
console.log(Company);
console.log(Price);
console.log(MadeIn);
