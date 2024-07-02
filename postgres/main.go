package main

import (
	"database/sql"
	"log"

	_ "github.com/lib/pq" // Import the driver
)

func main() {
	connStr := "user=postgres password=password dbname=media host=localhost sslmode=disable"
	db, err := sql.Open("postgres", connStr)
	if err != nil {
		panic(err)
	}
	defer db.Close()

	// Test the connection
	err = db.Ping()
	if err != nil {
		panic(err)
	}
	log.Println("Connected to the database!")

	// Define the SQL query to create the table
	createCarSqlQuery := `
		CREATE TABLE IF NOT EXISTS car
		(
    	brand character varying(255) COLLATE pg_catalog."default",
    	model character varying(255) COLLATE pg_catalog."default",
    	year integer,
    	id integer NOT NULL DEFAULT nextval('car_id_seq'::regclass),
    	"isEV" boolean NOT NULL,
    	CONSTRAINT car_pkey PRIMARY KEY (id)
		)
	`

	// Execute the query
	_, err = db.Exec(createCarSqlQuery)
	if err != nil {
		log.Fatal(err)
	}
	log.Println("Table created successfully!")

	// Exec example (INSERT)
	result, err := db.Exec("INSERT INTO car(brand, model, year, is_ev) VALUES ($1, $2, $3, $4);", "Mahindra", "xuv700", 2024, false)
	if err != nil {
		// Handle error
		panic(err.Error())
	}
	rowCounts, err := result.RowsAffected()
	if err != nil {
		// Handle error
		panic(err)
	}
	log.Println(rowCounts)

	// Query example (SELECT)
	rows, err := db.Query("SELECT * FROM car")
	if err != nil {
		// Handle error
		panic(err)
	}
	rows.Scan()
	log.Println(rows)
	defer rows.Close()

	// Iterate over rows
	for rows.Next() {
		// Retrieve data from each row
	}
}
