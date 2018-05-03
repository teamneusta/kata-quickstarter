package de.larmic.kata.kotlin

import org.assertj.core.api.Assertions.assertThat
import org.junit.jupiter.api.Assertions.assertAll
import org.junit.jupiter.api.DisplayName
import org.junit.jupiter.api.Test
import org.junit.jupiter.api.function.Executable

internal class FactorialCalculatorTest {

    @Test
    @DisplayName("this should be a meaningful description")
    fun factorial() {
        val calculator = FactorialCalculator()

        assertThat(calculator.factorial(0)).isEqualTo(1L)

        assertAll("all remaining tests",
                Executable { assertThat(calculator.factorial(1)).isEqualTo(1L) },
                Executable { assertThat(calculator.factorial(2)).isEqualTo(2L) },
                Executable { assertThat(calculator.factorial(3)).isEqualTo(6L) },
                Executable { assertThat(calculator.factorial(6)).isEqualTo(720L) })
    }
}