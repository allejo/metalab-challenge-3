# CHALLENGE #3

Back-End Challenge B - JSON Flat File

## Task

Build a simple PHP program that runs within your account on the campus web server.  This program will generate, as output, a JSON object that is specific to a query provided to your program.   Based upon the query provided, the program will read a single line in a Flat File (in CSV format), convert this line into a JSON object and return it the client.

## Sample

Input

```
curl http://www.csun.edu/~steve/META+challenge/flat_file.php?id=N
```

Output

```
{
    "status": "200",
    "success": "true",
    "version": "JSON-Flat-File-0.1",
    "hero": {
        "id": 2,
        "first-name" : "Clark",
        "last-name"  : "Kent",
        "persona"    : "Superman",
        "sex"        : "male"
    }
}
```

Data File

```
1,Bruce,Wayne,Batman,male
2,Clark,Kent,Superman,male
3,Peter,Parker,Spiderman,male
4,Bobby,Drake,Iceman,male
5,Angelica,Jones,Firestar,female
6,Tony,Stark,Iron Man,male
7,Bruce,Banner,Hulk,male
8,Aurora,Dante,Lightwave,female
9,Jean,Grey,Phoenix,female
```

## Specification

- The program must be written in the PHP programming language.
- The flat_file.php program must be installed on the campus web server (www.csun.edu) within your account.
- Install the data file in a location that is NOT accessible via the web.

### Enchancements

1. Implement the query string: persona=<name>

1. Implement the query string: “sex=<sex>”

    Note that you need to ensure your program can return an array of superheros.

1. Implement the ability to place a regular expression within the value of the query string.

1. Implement the ability to allow selection based upon two or more attributes.  E.g.,

    ```
    curl http://www.csun.edu/~steve/META+challenge/flat_file.php?first-name=Bruce&sex=male
    ```