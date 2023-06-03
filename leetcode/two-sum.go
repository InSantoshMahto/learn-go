package main

import "fmt"

func main() {
	var target = 6
	var numbers = []int{1, 2, 2, 1, 3, 2, 4}
	resIndices := twoSum(numbers, target)
	fmt.Println(resIndices)
}

func twoSum(numbers []int, target int) []int {
	myMap := make(map[int]int)
	for curIndex, curValue := range numbers {
		diff := target - curValue
		diffIndex, isPresent := myMap[diff]
		if isPresent {
			return []int{diffIndex, curIndex}
		}
		myMap[curValue] = curIndex
	}
	return []int{}
}
