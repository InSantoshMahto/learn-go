package main

import "fmt"

const LoginToken string = "hd6dk8fk59"

func main() {
	var username string = "santosh"
	fmt.Println(username)
	fmt.Printf("Variable is of type: %T \n", username)

	var isLoogedIn bool = true
	fmt.Println(isLoogedIn)
	fmt.Printf("Variable is of type: %T \n", isLoogedIn)

	var smallValue uint8 = 255
	fmt.Println(smallValue)
	fmt.Printf("Variable is of type: %T \n", smallValue)

	var smallFloat float32 = 255.356976425677777785
	fmt.Println(smallFloat)
	fmt.Printf("Variable is of type: %T \n", smallFloat)

	// default values and some alias
	var anotherInt int
	fmt.Println(anotherInt)
	fmt.Printf("Variable is of type: %T \n", anotherInt)

	var anotherFloat float32
	fmt.Println(anotherFloat)
	fmt.Printf("Variable is of type: %T \n", anotherFloat)

	var anotherBool bool
	fmt.Println(anotherBool)
	fmt.Printf("Variable is of type: %T \n", anotherBool)

	var anotherString string
	fmt.Println(anotherString)
	fmt.Printf("Variable is of type: %T \n", anotherString)

	// implicit type
	var website = "india.com"
	fmt.Println(website)

	// no var style
	numberOfUser := 43.6
	fmt.Println(numberOfUser)

	// constant
	fmt.Println(LoginToken)
	fmt.Printf("Variable is of type: %T \n", LoginToken)
}
