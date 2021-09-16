# External brackets

1. Design and implement a library/package to remove external matching round brackets. 
Assume no pathological input is provided [ e.g. no “((abc)” ]. 

Examples:

| Input         | Output        |
|---------------|---------------|
| `(abc)`       | `abc`         |
| `((abc))`     | `abc`         |
| `(abc`        | `(abc`        |
|               |               |
| `()`          |               |
| `(ab) (cd)`   | `(ab) (cd)`   |
| `((ab) (cd))` | `(ab) (cd)`   |
| `ab(cd)`      | `ab(cd)`      |

2. How can we be reasonably sure about the correctness of the solution?
3. Discuss the space-time complexity of the solution (both in general and language related)
4. What if a pathological input could be provided?
5. Provide this solution as a service a user can call via HTTP (preferred deployment method is docker but alternatives are welcome if justified) 

