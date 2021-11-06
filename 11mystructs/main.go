package main

import "fmt"

func main() {
	fmt.Println("Struct in golang")
	//  no inheritance in golang; no super or parent
	hit := User{"hit", "hit@go.dev", true, 16}
	fmt.Println(hit)
	fmt.Printf("hit details are %+v\n", hit)
	fmt.Printf("Name is %v and email is %v\n", hit.Name, hit.Email)
}

type User struct {
	Name   string
	Email  string
	Status bool
	Age    int
}
