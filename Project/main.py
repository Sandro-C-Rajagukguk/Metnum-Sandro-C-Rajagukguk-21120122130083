import numpy as np
import matplotlib.pyplot as plt

def lagrange_interpolation(x, y, x_point):
    n = len(x)
    result = 0
    for i in range(n):
        term = y[i]
        for j in range(n):
            if j != i:
                term *= (x_point - x[j]) / (x[i] - x[j])
        result += term
    return result

def newton_interpolation(x, y, x_point):
    n = len(x)
    divided_diff = np.zeros((n, n))
    divided_diff[:,0] = y

    for j in range(1, n):
        for i in range(n - j):
            divided_diff[i][j] = (divided_diff[i+1][j-1] - divided_diff[i][j-1]) / (x[i+j] - x[i])

    result = divided_diff[0,0]
    term = 1

    for j in range(1, n):
        term *= (x_point - x[j-1])
        result += divided_diff[0, j] * term

    return result

x = np.array([5, 10, 15, 20, 25, 30, 35, 40])
y = np.array([40, 30, 25, 40, 18, 20, 22, 15])
x_values = np.linspace(5, 40, 100)

lagrange_values = [lagrange_interpolation(x, y, xi) for xi in x_values]
newton_values = [newton_interpolation(x, y, xi) for xi in x_values]

plt.plot(x, y, 'ro', label='Data Points')
plt.plot(x_values, lagrange_values, 'b-', label='Lagrange Interpolation')
plt.plot(x_values, newton_values, 'g--', label='Newton Interpolation')
plt.legend()
plt.xlabel('Tegangan (kg/mm^2)')
plt.ylabel('Waktu Patah (jam)')
plt.title('Interpolasi Lagrange dan Newton')
plt.show()
