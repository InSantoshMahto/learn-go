package main

import "fmt"

func main() {
	var batman string = "I am batman"
	fmt.Println(batman)

	var superman string
	superman = "I am superman"
	fmt.Println(superman)

	thor := "I am thor"
	fmt.Println(thor)

	thorRating := 3.5
	fmt.Printf("%v, %T\t", thorRating, thorRating)

	var ironman, capAmr string = "I am ironman", "I am capt amr"
	fmt.Println(ironman, capAmr)

	var defaultValue bool
	fmt.Println(defaultValue)

	var (
		name      = "santosh"
		age       = 23
		love      = "code"
		isMarried = false
	)

	fmt.Println(name, age, love, isMarried)
}
