<?php
/**
 * Bookmark voting badge.
 * Shows the number of votes and buttons to vote for or
 * against a bookmark.
 * Expects a $row variable with bookmark data
 */
if (!$GLOBALS['enableVoting'] || $GLOBALS['votingMode'] != 2) {
    return;
}
if (!isset($row['hasVoted'])) {
    $classes = 'vote-horiz vote-horiz-inactive';
} else if (isset($row['vote']))  {
    $classes = 'vote-horiz '
        . ($row['vote'] == 1
           ? 'vote-horiz-for'
           : 'vote-horiz-against'
        );
} else {
    $classes = 'vote-horiz';
}
echo '<div class="' . $classes . '" id="bmv-' . $row['bId'] . '">';
echo sprintf(
    T_('Voting <span class="voting">%d</span>'), $row['bVoting']
) . ' ';

if (isset($row['hasVoted'])) {
    if ($row['vote'] != 1) {
        echo '<a class="btn btn-sm btn-default vote-for" rel="nofollow" href="'
            . createVoteURL(true, $row['bId']) . '"'
            . ' onclick="javascript:vote(' . $row['bId'] . ',1); return false;"'
            . '><i class="fa fa-thumbs-o-up"></i> ' . T_('Vote for') . '</a> ';
    } else {
        echo '<span class="vote-for-inactive"><i class="fa fa-thumbs-up"></i> '
            . T_('Vote for') . '</span> ';
    }
    
    
    if ($row['vote'] != -1) {
        echo '<a class="btn btn-sm btn-default vote-against" rel="nofollow" href="'
            . createVoteURL(false, $row['bId']) . '"'
            . ' onclick="vote(' . $row['bId'] . ',-1); return false;"'
            . '><i class="fa fa-thumbs-o-down"></i> ' . T_('Vote against') . '</a>';
    } else {
        echo '<span class="vote-against-inactive"><i class="fa fa-thumbs-down"></i> '
            . T_('Vote against') . '</span>';
    }
}
echo '</div>';
?>