package main

import (
	"fmt"
	"sort"
)

func main() {
	fmt.Println("Welcome to video of slices")
	var fruitList = []string{"Apple", "Tomato", "Peach"}
	fmt.Printf("Type of fruitLest is %T\n", fruitList)
	fruitList = append(fruitList, "Mango", "banana")
	fmt.Println(fruitList)

	fruitList = append(fruitList[:3])
	fmt.Println(fruitList)

	highScore := make([]int, 4)
	highScore[0] = 234
	highScore[1] = 945
	highScore[2] = 465
	highScore[3] = 867
	// highScore[4] = 777
	highScore = append(highScore, 555, 666, 321)
	fmt.Println(highScore, len(highScore))
	sort.Ints(highScore)
	fmt.Println(highScore, sort.IntsAreSorted(highScore))

	var courses = []string{"reactJS", "Javascript", "Swift", "Python", "ruby"}
	fmt.Println(courses)
	var index = 2
	courses = append(courses[:index], courses[index+1:]...)
	fmt.Println(courses)
}
