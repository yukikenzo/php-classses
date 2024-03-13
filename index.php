<?php
require_once "cat.php";
require_once "Dog.php";
require_once "Animal.php";
$cat = new Cat;

Dog::eat();
Cat::eat();

//require_once "Car.php";
//$car = new Car("Dacia", 19000);
//$car->makeNoise();

//$cat = new Cat;
//$cat->setName("Mincis - " . $cat->birthday(). "<br>");
//echo $cat->name;
//$cat->setName("Brincis - " . $cat->birthday(). "<br>");
//echo $cat->name;
//Cat::moew();


//C++ Class
//#include <iostream>
//#include <string>
//
//using namespace std;
//
//class Car{
//    public:
//        string brand;
//        Car(string b){
//            brand = b;
//        }
//        Car(string brand , int mileage){
//            this->brand = brand;
//            this->mileage = mileage;
//        }
//        ~Car(){
//            cout << "\n" << this->brand << " is Dead" << endl;
//        }
//    private:
//        int mileage = 0;
//};
//
//int main() {
//
//    Car myCar("Dacia", 19000);
//    cout << myCar.brand << endl;
//
//    std::cout << "Hello world!";
//
//    return 0;
//}

// Online C++ compiler to run C++ program online
#include <iostream>
#include <string>
/*
using namespace std;

class vehicle {
public:
string brand;
vehicle(string brand) {
this->brand = brand;
}
vehicle(string brand, int mileage) {
    this->brand = brand;
    this->mileage = mileage;
}
        ~vehicle() {
        cout << this->brand << " is dead" <<endl;
        }
        void makeNoise(){
cout << "Beep, beep \n";
        };


};

class Car : public vehicle{
    public:
    Car(string brand, int mileage) : vehicle(brand, mileage){
    };
    // Car(int mileage) : vehicle(mileage){
    // };

};

int main() {
    // Write C++ code here
Car* myCar = new Car("Dacia");
    // Car* myCar2 = new Car(1900);
    cout << myCar->brand << endl;
    // cout << myCar->mileage << endl;
    delete myCar;
    cout << "Hello world! \n";

    return 0;
}
*/

?>