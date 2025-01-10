export const formatoReais = (n: number): string => {
    return n.toLocaleString("pt-BR", {style:"currency", currency:"BRL", minimumFractionDigits: 2})
}

export const formatoKWh = (n: number): string => {
    return n.toLocaleString('pt-BR', { maximumFractionDigits: 0 }) + ' KWh'
}

export const economiaAcumulada = (n: number): number => {
    const a1 = n * 0.2
    const a2 = a1 * 1.12 + a1 * 1.06
    const a3 = a2 * 1.12 + a1 * 1.06 * 1.5
    const a4 = a3 * 1.12 + a1 * 1.06 * 2
    const a5 = a4 * 1.12 + a1 * 1.06 * 2
    const a6 = a5 * 1.12 + a1 * 1.06 * 2
    const a7 = a6 * 1.12 + a1 * 1.06 * 2.5
    const a8 = a7 * 1.12 + a1 * 1.06 * 2.5
    const a9 = a8 * 1.12 + a1 * 1.06 * 2.5
    const a10 = a9 * 1.12 + a1 * 1.06 * 2.5
    const a11 = a10 * 1.12 + a1 * 1.06 * 2.5
    const a12 = a11 * 1.12 + a1 * 1.06 * 2.5
    const a13 = a12 * 1.12 + a1 * 1.06 * 2.5
    const a14 = a13 * 1.12 + a1 * 1.06 * 2.5
    const a15 = a14 * 1.12 + a1 * 1.06 * 2.5
    const a16 = a15 * 1.12 + a1 * 1.06 * 2.5
    const a17 = a16 * 1.12 + a1 * 1.06 * 2.5
    const a18 = a17 * 1.12 + a1 * 1.06 * 2.5
    const a19 = a18 * 1.12 + a1 * 1.06 * 2.5
    const a20 = a19 * 1.12 + a1 * 1.06 * 2.5

    return a20
}