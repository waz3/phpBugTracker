
// config.php - Set up configuration options
// ------------------------------------------------------------------------
// Copyright (c) 2001 The phpBugTracker Group
// ------------------------------------------------------------------------
// This file is part of phpBugTracker
//
// phpBugTracker is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// phpBugTracker is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with phpBugTracker; if not, write to the Free Software Foundation,
// Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
// ------------------------------------------------------------------------
// $Id: config-dist.php,v 1.1 2001/10/30 04:05:58 bcurtis Exp $

define ('PHPLIB_PATH', ''); // If PHPlib is not in your include path

// Database Config
define ('DB_TYPE', '{db_type}');  // using PHPlib file naming
define ('DB_HOST', '{db_host}');
define ('DB_DATABASE', '{db_database}');
define ('DB_USER', '{db_user}');
define ('DB_PASSWORD', '{db_pass}');

// Database Table Config
// you can change either the prefix of the table names or each table name individually
define ('TBL_PREFIX', '{tbl_prefix}');	// the prefix for all tables, leave empty to use the old style
define ('TBL_ACTIVE_SESSIONS', TBL_PREFIX.'active_sessions');
define ('TBL_DB_SEQUENCE',     TBL_PREFIX.'db_sequence');
define ('TBL_ATTACHMENT',      TBL_PREFIX.'attachment');
define ('TBL_AUTH_GROUP',      TBL_PREFIX.'auth_group');
define ('TBL_AUTH_PERM',       TBL_PREFIX.'auth_perm');
define ('TBL_AUTH_USER',       TBL_PREFIX.'auth_user');
define ('TBL_BUG',             TBL_PREFIX.'bug');
define ('TBL_BUG_CC',          TBL_PREFIX.'bug_cc');
define ('TBL_BUG_GROUP',       TBL_PREFIX.'bug_group');
define ('TBL_BUG_HISTORY',     TBL_PREFIX.'bug_history');
define ('TBL_COMMENT',         TBL_PREFIX.'comment');
define ('TBL_COMPONENT',       TBL_PREFIX.'component');
define ('TBL_CONFIGURATION',   TBL_PREFIX.'configuration');
define ('TBL_GROUP_PERM',      TBL_PREFIX.'group_perm');
define ('TBL_OS',              TBL_PREFIX.'os');
define ('TBL_PROJECT',         TBL_PREFIX.'project');
define ('TBL_RESOLUTION',      TBL_PREFIX.'resolution');
define ('TBL_SAVED_QUERY',     TBL_PREFIX.'saved_query');
define ('TBL_SEVERITY',        TBL_PREFIX.'severity');
define ('TBL_STATUS',          TBL_PREFIX.'status');
define ('TBL_USER_GROUP',      TBL_PREFIX.'user_group');
define ('TBL_USER_PERM',       TBL_PREFIX.'user_perm');
define ('TBL_VERSION',         TBL_PREFIX.'version');
define ('TBL_PROJECT_GROUP',   TBL_PREFIX.'project_group');

define ('ONEDAY', 86400);

require_once (PHPLIB_PATH.'db_'.DB_TYPE.'.inc');
require_once (PHPLIB_PATH.'ct_sql.inc');
require_once (PHPLIB_PATH.'session.inc');
require_once (PHPLIB_PATH.'auth.inc');
require_once (PHPLIB_PATH.'perm.inc');
require_once (PHPLIB_PATH.'page.inc');
require_once (PHPLIB_PATH.'template.inc');

?>