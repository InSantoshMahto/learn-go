package main

import "fmt"

func main() {
	var ages [2]int
	ages[0] = 1
	ages[1] = 2
	fmt.Println(ages, len(ages))
	var days = [7]bool{true, false, true, true, false, true, false}
	fmt.Println(days)
    for i := 0; i < len(days); i++ {
        fmt.Println(days[i])
    }
}
