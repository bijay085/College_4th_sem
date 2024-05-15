const board = document.getElementById('chessboard');

function createChessBoard() {
  const numbers = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
  const letters = [8, 7, 6, 5, 4, 3, 2, 1];

  // Add numbers on the left side
  for (let i = 0; i < 8; i++) {
    const numberSquare = document.createElement('div');
    numberSquare.classList.add('square', 'side');
    numberSquare.textContent = numbers[i];
    board.appendChild(numberSquare);
  }

  // Create chessboard grid
  for (let i = 0; i < 8; i++) {
    // Add letters on top
    const letterSquare = document.createElement('div');
    letterSquare.classList.add('square');
    letterSquare.textContent = letters[i];
    board.appendChild(letterSquare);

    for (let j = 0; j < 8; j++) {
      const square = document.createElement('div');
      square.classList.add('square');

      if ((i + j) % 2 === 0) {
        square.classList.add('white');
      } else {
        square.classList.add('black');
      }

      board.appendChild(square);
    }
  }
}

createChessBoard();
