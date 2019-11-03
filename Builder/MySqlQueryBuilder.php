<?php
include "SqlQueryBuilder.php";
class MySqlQueryBuilder implements SqlQueryBuilder
{
    protected $query;

    protected function reset()
    {
        $this->query = new \stdClass;
    }
    public function select( $tableName, $fields)
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $tableName;
        $this->query->type = 'select';

        return $this;
    }

    /**
     * Add a WHERE condition.
     */
    public function where( $field,  $value,  $operator = '=')
    {
        if (!in_array($this->query->type, ['select', 'update'])) {
            throw new \Exception("WHERE can only be added to SELECT OR UPDATE");
        }
        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    /**
     * Add a LIMIT constraint.
     */
    public function limit( $start,  $offset)
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    /**
     * Get the final query string.
     */
    public function getSql()
    {
        $query = $this->query;
        $sql = $query->base;
        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        $sql .= ";";
        return $sql;
    }
}