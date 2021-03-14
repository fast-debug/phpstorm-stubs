<?php

/**
 * This function makes the debugger break on the specific line as if a normal file/line breakpoint was set on this line.
 *
 * @return bool
 */
function fast_debug_break () {}

/**
 * Returns whether a debugging session is active.
 *
 * Returns true if a debugging session through DBGp is currently active with a client attached; false, if not.
 *
 * @return bool
 */
function fast_debug_is_debugger_active() {}