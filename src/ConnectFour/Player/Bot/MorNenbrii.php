<?php


namespace ConnectFour\Player\Bot;


use ConnectFour\Game\Grid\Helper;
use ConnectFour\Player\PlayerInterface;

class MorNenbrii implements PlayerInterface
{
    /**
     * Returns next move of player by given grid
     *
     * <code>
     * $grid = [
     *    [0,0,0,1,2,2,0],
     *    [0,0,0,1,2,0,0],
     *    [0,0,0,0,1,0,0],
     *    [0,0,0,0,0,0,0],
     *    [0,0,0,0,0,0,0],
     *    [0,0,0,0,0,0,0],
     * ]
     * </code>
     *
     * @param array $grid Grid representation in 7 columns, 6 rows array
     *
     * @return int 0 to 6 index of column to drop disk
     */
    public function move($grid)
    {
        if (getColumn($grid, 1)[5] == 0) return 2;
        else return getAvailableColumns($grid)[0];
    }
}
