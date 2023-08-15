package main

import "fmt"

func main() {
	fmt.Println("Maps in golang")
	languages := make(map[string]string)
	languages["JS"] = "Javascript"
	languages["TS"] = "Typescript"
	languages["PY"] = "Python"
	fmt.Println("List of all languages: ", languages)
	fmt.Println("JS shorts for: ", languages["JS"])
	delete(languages, "TS")
	fmt.Println("List of all languages: ", languages)
	// loops are interested in golang
	for kay, value := range languages {
		fmt.Printf("For key %v value is %v\n", kay, value)
	}

	for _, value := range languages {
		fmt.Println(value)
	}
}
