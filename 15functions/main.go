package main

import "fmt"

func main() {
	fmt.Println("Welcome to function in golang")
	greeter()

	result := adder(3, 5)
	fmt.Println("Result is: ", result)

	proResult, _ := proAdder(1, 2, 3, 4, 5, 2, 4, 6, 7, 8)
	fmt.Println("Pro Result is: ", proResult)
}

func greeter() {
	fmt.Println("Namaste from golang")
}

func adder(valOne int, valTwo int) int {
	return valOne + valTwo
}

func proAdder(values ...int) (int, string) {
	total := 0
	for _, val := range values {
		total += val
	}
	return total, "Got Result"
}
