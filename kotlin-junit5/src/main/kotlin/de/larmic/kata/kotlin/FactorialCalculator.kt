package de.larmic.kata.kotlin

class FactorialCalculator {

    fun factorial(input: Long): Long {
        return if (input <= 1) {
            1
        } else input * factorial(input - 1)
    }

}