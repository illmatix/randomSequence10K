# Random Sequence Generator

Welcome to the **Random Sequence Generator** project! This application generates randomized sequences of integers, which can be used for various purposes such as testing, data generation, or fun experiments. The project follows modern PHP standards (PSR-12) and includes automated testing with PHPUnit.

---

## Features

- Generate randomized sequences of integers.
- Define custom ranges for sequence generation.
- Fully tested with PHPUnit, including code coverage reporting.
- Supports PSR-12 coding standards and includes automated code formatting.
- Containerized environment for consistent development and testing.

---

## Getting Started

### Prerequisites

To run this project, ensure you have the following installed:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- (Optional) [Composer](https://getcomposer.org/) if running locally.

---

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/illmatix/randomSequence10K.git
   cd randomSequence10K
   ```
2. Start the Docker environment:
   ```bash
   docker-compose up -d --build
   ```
3. Access the container:
   ```bash
   docker exec -it php-dev-container bash
   ```
4. Install PHP dependencies:
   ```bash 
   compose install
   ```

### Usage

#### Generate a Random Sequence
Run the application to generate a random sequence:
```bash
   docker exec -it php-dev-container php public/index.php
```
You can customize the sequence range or length by modifying the SequenceGenerator class.

### Testing
The project includes automated tests written with PHPUnit.

#### Run Tests
Run all tests:
```bash
   composer test
```

### Development
#### Code Style and Formatting
This project follows PSR-12 standards and uses tools to enforce coding styles:
* **PHP_CodeSniffer**: Check code for PSR-12 compliance:
```bash
   composer lint
```
* **PHP_CodeSniffer Fixer**: Automatically fix linting issues:
```bash
   composer lint:fix
```
* **PHP-CS-Fixer**: Automatically format code:
```bash
   composer format
```

### Contributing
Contributions are welcome! If you'd like to contribute:

1. Fork the repository. 
2. Create a new branch for your changes. 
3. Submit a pull request with a description of your changes.

### Licence 
This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.

### Contact
For questions or suggestions, feel free to reach out via the repository issues page. Happy coding! 🚀