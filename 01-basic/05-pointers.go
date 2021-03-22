package main

import "fmt"

func main() {
	var age int = 23
	ageRef := &age
	fmt.Println(age, ageRef, *ageRef)
	// fmt.Printf("%v", &ageRef)
}
