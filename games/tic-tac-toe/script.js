$(document).ready(function() {
  var cell_value = ['', '', '',
    '', '', '',
    '', '', ''
  ];

  var player_letter = '';
  var computer_letter = '';

  $("#x").click(function() {
    player_letter = 'x';
    computer_letter = 'o';
    $("#select-screen").toggle("slide");
    $("#result").show();
    $("#game-board").show();
    $("#result").html("Game in progress");
    randomComputerPlay();
  });
  $("#o").click(function() {
    player_letter = 'o';
    computer_letter = 'x';
    $("#select-screen").toggle("slide");
    $("#result").show();
    $("#game-board").show();
    $("#result").html("Game in progress");
    randomComputerPlay();
  });

  $(".cell").click(function() {
    var cell_id = $(this).attr('id');
    var cell_num = parseInt(cell_id.replace('cell-', ''));
    if (cell_value[cell_num - 1] === '') {
      $("#" + cell_id).html("<div class='letter'>" + player_letter + "</div>");
      cell_value[cell_num - 1] = player_letter;
      $(this).addClass('taken');
      if (checkWinner(cell_value) === player_letter) {
        $("#result").html("Player wins! Click to play again.");
        $("#game-over-overlay").show();
      } else {
        computerPlay(computer_letter);
        if (checkWinner(cell_value) === computer_letter) {
          $("#result").html("Computer wins... Click to play again.");
          $("#game-over-overlay").show();
        } else if (isTie(cell_value)) {
          $("#result").html("It's a tie! Click to play again.");
          $("#game-over-overlay").show();
        }
      }
    }
  });

  $("#game-over-overlay").click(function() {
    $("#game-over-overlay").hide();
    $(".cell").css({
      "color": "white"
    });
    cell_value = ['', '', '',
      '', '', '',
      '', '', ''
    ];
    $(".cell").removeClass('taken');
    $(".cell").html('');
    $("#result").html("Game in progress");
    randomComputerPlay();
  });

  function randomComputerPlay() {
    // make it an even number, so it's a corner or middle square
    var num = Math.floor(Math.random() * 5);
    num *= 2;
    $("#cell-" + (num + 1)).html("<div class='letter'>" + computer_letter + "</div>");
    cell_value[num] = computer_letter;
    $("#cell-" + (num + 1)).addClass('taken');
  }

  function computerPlay(computer_letter) {
    // take center if it's not taken
    if (cell_value[4] === '') {
      $("#cell-5").html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[4] = computer_letter;
      $("#cell-5").addClass('taken');
      return;
    }

    // if computer can win, win
    var move = canWin(computer_letter);
    if (move !== 9) {
      $("#cell-" + (move + 1)).html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[move] = computer_letter;
      $("#cell-" + (move + 1)).addClass('taken');
      return;
    }

    // if player can win, block
    move = canWin(player_letter);
    if (move !== 9) {
      $("#cell-" + (move + 1)).html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[move] = computer_letter;
      $("#cell-" + (move + 1)).addClass('taken');
      return;
    }

    // if computer doesn't have to block or win, pick a corner
    if (cell_value[0] === '') {
      $("#cell-1").html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[0] = computer_letter;
      $("#cell-1").addClass('taken');
      return;
    } else if (cell_value[2] === '') {
      $("#cell-3").html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[2] = computer_letter;
      $("#cell-3").addClass('taken');
      return;
    } else if (cell_value[6] === '') {
      $("#cell-7").html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[6] = computer_letter;
      $("#cell-7").addClass('taken');
      return;
    } else if (cell_value[8] === '') {
      $("#cell-9").html("<div class='letter'>" + computer_letter + "</div>");
      cell_value[8] = computer_letter;
      $("#cell-9").addClass('taken');
      return;
    }

    for (var i = 0; i < 99; i++) {
      var num = Math.floor(Math.random() * 9);
      if (cell_value[num] === '') {
        $("#cell-" + (num + 1)).html("<div class='letter'>" + computer_letter + "</div>");
        cell_value[num] = computer_letter;
        $("#cell-" + (num + 1)).addClass('taken');
        return;
      }
    }
  }

  function canWin(letter) {
    var can_win_str = letter + letter;

    // horizontal
    var row = cell_value[0] + cell_value[1] + cell_value[2];
    if (row === can_win_str) {
      for (var i = 0; i < 3; i++) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }
    row = cell_value[3] + cell_value[4] + cell_value[5];
    if (row === can_win_str) {
      for (var i = 3; i < 6; i++) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }
    row = cell_value[6] + cell_value[7] + cell_value[8];
    if (row === can_win_str) {
      for (var i = 6; i < 9; i++) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }

    // vertical
    var row = cell_value[0] + cell_value[3] + cell_value[6];
    if (row === can_win_str) {
      for (var i = 0; i < 7; i += 3) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }
    row = cell_value[1] + cell_value[4] + cell_value[7];
    if (row === can_win_str) {
      for (var i = 1; i < 8; i += 3) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }
    row = cell_value[2] + cell_value[5] + cell_value[8];
    if (row === can_win_str) {
      for (var i = 2; i < 9; i += 3) {
        if (cell_value[i] === '') {
          return i;
        }
      }
    }

    // diagonal
    row = cell_value[0] + cell_value[4] + cell_value[8];
    if (row === can_win_str) {
      if (cell_value[0] === '') {
        return 0;
      } else if (cell_value[4] === '') {
        return 4;
      } else if (cell_value[8] === '') {
        return 8;
      }
    }
    row = cell_value[2] + cell_value[4] + cell_value[6];
    if (row === can_win_str) {
      if (cell_value[2] === '') {
        return 2;
      } else if (cell_value[4] === '') {
        return 4;
      } else if (cell_value[6] === '') {
        return 6;
      }
    }

    return 9;
  }
    
  function isTie(cell_value) {
    var is_full = true;
    for (var i = 0; i < cell_value.length; i++) {
      if (cell_value[i] === '') {
        is_full = false;
      }
    }
    return is_full;
  }

  function colorWinningCells(x, y, z) {
    $("#cell-" + x).css({
      "color": "green"
    });
    $("#cell-" + y).css({
      "color": "green"
    });
    $("#cell-" + z).css({
      "color": "green"
    });
  }

  function checkWinner(board) {
    // horizontal wins
    if (board[0] === board[1] && board[1] === board[2]) {
      if (board[0] !== '') {
        colorWinningCells(1, 2, 3);
      }
      return board[0];
    }
    if (board[3] === board[4] && board[4] === board[5]) {
      if (board[3] !== '') {
        colorWinningCells(4, 5, 6);
      }
      return board[3];
    }
    if (board[6] === board[7] && board[7] === board[8]) {
      if (board[6] !== '') {
        colorWinningCells(7, 8, 9);
      }
      return board[6];
    }

    // vertical wins
    if (board[0] === board[3] && board[3] === board[6]) {
      if (board[0] !== '') {
        colorWinningCells(1, 4, 7);
      }
      return board[0];
    }
    if (board[1] === board[4] && board[4] === board[7]) {
      if (board[1] !== '') {
        colorWinningCells(2, 5, 8);
      }
      return board[1];
    }
    if (board[2] === board[5] && board[5] === board[8]) {
      if (board[2] !== '') {
        colorWinningCells(3, 6, 9);
      }
      return board[2];
    }

    // diagonal wins
    if (board[0] === board[4] && board[4] === board[8]) {
      if (board[0] !== '') {
        colorWinningCells(1, 5, 9);
      }
      return board[0];
    }
    if (board[2] === board[4] && board[4] === board[6]) {
      if (board[2] !== '') {
        colorWinningCells(3, 5, 7);
      }
      return board[2];
    }
  }
});