package main

import (
    "fmt"
    "os"
    "time"
)

func main() {
    file,err := os.Create("write_file_goroutine.txt")
    if err != nil {
        fmt.Println("Cannot create file", err)
    }

    var x string = "test data \n"
    
    start := time.Now()
    for i := 0; i < 1000000; i++ {
		go fmt.Fprintf(file, x)
	}
    elapsed := time.Since(start)
    file.Close()
    fmt.Printf("File writes took %s \n", elapsed)

}
