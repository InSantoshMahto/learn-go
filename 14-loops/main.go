package main

import "fmt"

func main() {
	fmt.Println("Welcome to loops in golang")

	days := []string{"Sunday", "Monday", "Tuesday", "Wednesday", "Friday", "Saturday"}
	fmt.Println(days)

	// for i := 0; i < len(days); i++ {
	// 	fmt.Println(days[i])
	// }

	// for i := range days {
	// 	fmt.Println(days[i])
	// }

	// for index, day := range days {
	// 	fmt.Printf("index is %v and value is %v\n", index, day)
	// }

	for _, day := range days {
		fmt.Println(day)
	}

	value := 1

	for value < 10 {
		if value == 3 {
			value++
			continue
		}

		if value == 7 {
			break
		}

		if value == 5 {
			goto lco
		}

		fmt.Println("Value is: ", value)
		value++
	}

lco:
	fmt.Println("Jumping at learnCodeOnline.in")
}
