package main

import "fmt"

func main() {
	fmt.Println("Method in golang")
	//  no inheritance in golang; no super or parent
	hit := User{"hit", "hit@go.dev", true, 16}
	fmt.Println(hit)
	fmt.Printf("hit details are %+v\n", hit)
	fmt.Printf("Name is %v and email is %v\n", hit.Name, hit.Email)
	hit.GetStatus()
	hit.NewMail()
	fmt.Println("Email: ", hit.Email)
}

type User struct {
	Name   string
	Email  string
	Status bool
	Age    int
}

func (u User) GetStatus() {
	fmt.Println("Is user active: ", u.Status)
}

func (u User) NewMail() {
	u.Email = "test@go.dev"
	fmt.Println("Email of this user is: ", u.Email)
}
