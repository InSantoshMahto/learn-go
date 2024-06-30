package main

import "fmt"

func main() {
	defer fmt.Println("Work before return statement one")
	fmt.Println("Learn defer in golang")
	defer fmt.Println("Work before return statement two")
	fmt.Println("Work like a pro")
	fmt.Println(true)
	defer fmt.Println("Work before return statement three")
	fmt.Println(false)
	myDefer()
}

func myDefer() {
	for i := 0; i < 5; i++ {
		defer fmt.Println(i)
	}
}
