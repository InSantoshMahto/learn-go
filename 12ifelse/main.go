package main

import (
	"fmt"
	"time"
)

func main() {
	fmt.Println("If and Else in golang")

	loginCount := time.Now().Second()
	var result string
	if loginCount < 10 {
		result = "Regular user"
	} else if loginCount > 10 {
		result = "Watch out"
	} else {
		result = "Exactly 10 login count"
	}
	fmt.Println(result)

	myNum := time.Now().Second()
	if myNum%2 == 0 {
		fmt.Println("Number is even")
	} else {
		fmt.Println("Number is odd")
	}

	if num := time.Now().Second(); num < 10 {
		fmt.Println("Number is less than 10")
	} else {
		fmt.Println("Number is NOT less than 10")
	}
}
